/**
 * B2B Wholesale Trading Entity Models and Type Definitions
 */

export interface WholesaleTierRule {
  minQuantity: number;
  maxQuantity?: number;
  discountMultiplier: number;
  tierClassification: 'PLATINUM' | 'GOLD' | 'COMMERCIAL_DISTRIBUTOR';
}

export interface ProductCatalogItem {
  id: string;
  sku: string;
  titleAr: string;
  titleEn: string;
  baseWholesaleRate: number;
  availableStockQty: number;
  minimumOrderUnit: number;
  tierRules: WholesaleTierRule[];
}

export interface WholesaleCartReservation {
  reservationToken: string;
  accountId: string;
  items: Array<{
    sku: string;
    allocatedQty: number;
    lockedUnitRate: number;
  }>;
  expiresAtEpoch: number;
}
